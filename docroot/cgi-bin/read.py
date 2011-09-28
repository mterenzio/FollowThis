#!/usr/bin/python2.6

import cgi
import cgitb; cgitb.enable()
import sys, os
import StringIO
import json
from topia.termextract import tag
from topia.termextract import extract

# to make this thing exist...
form = cgi.FieldStorage()
text  = form.getvalue("text")
if not "language" in form :
	lang = "english"
else :
	lang  = form.getvalue("language")


if not "text" in form :
	print 'Content-type: text/html; charset=utf-8'
	print 'Status: 400 Invalid Input'
	print
	print "<html>"
	print "<head>"
	print "<title>Keyword Extraction</title>"
	print "</head><body>"
	print "<h1>Keyword Extraction</h1>"
	print "This is the endpoint to a web service that lets you post text and extracts keywords from text and returns a json representation of them.<br /><br />"
	print "To use the service, either post a parameter called text to this url or construct a url similar to the one below.<br /><br />"
	print "<a href=\"http://followth.is/cgi-bin/extract.py?text=Mary+had+a+little+lamb\">http://followth.is/cgi-bin/extract.py?text=Mary+had+a+little+lamb</a>"
	print "</body>"
	print "</html>"
	sys.exit(1)
	

def uniqify(seq, idFun=None):
    # order preserving
    if idFun is None:
        def idFun(x): return x
    seen = {}
    result = []
    for item in seq:
        marker = idFun(item)
        # in old Python versions:
        # if seen.has_key(marker)
        # but in new ones:
        if marker in seen: continue
        seen[marker] = 1
        result.append(item)
    return result
 
def build(extractable, language='english'):
    # initialize the tagger with the required language
    tagger = tag.Tagger(language)
    tagger.initialize()
 
    # create the extractor with the tagger
    extractor = extract.TermExtractor(tagger=tagger)
    # invoke tagging the text
    extractor.tagger(extractable)
    # extract all the terms, even the &amp;quot;weak&amp;quot; ones
    extractor.filter = extract.DefaultFilter(singleStrengthMinOccur=1)
    # extract
    return extractor(extractable)
 
resultList = []
 
# get a results
result = build(text, lang)
# or result = build('dutch')
 
for r in result:
    # discard the weights for now, not using them at this point and defaulting to lowercase keywords/tags
  resultList.append(r[0].lower())
 
# dump to JSON output
print 'Content-Type: text/html; charset=utf-8'
print
print json.dumps(sorted(uniqify(resultList)))


