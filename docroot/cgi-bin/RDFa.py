#!/usr/bin/python2.6
# -*- coding: utf-8 -*-
"""
Possible CGI entry point for the RDFa package.

This version is adapted to the particualarities of the W3C setup as well as my own machine regarding Python paths

This file must be adapted to the local setup in settig the right path elements!

@author: U{Ivan Herman<a href="http://www.w3.org/People/Ivan/">}
@license: This software is available for use under the
U{W3C® SOFTWARE NOTICE AND LICENSE<href="http://www.w3.org/Consortium/Legal/2002/copyright-software-20021231">}
@contact: Ivan Herman, ivan@w3.org
"""

"""
$Id: RDFa.py,v 1.12 2009/09/25 14:12:33 ivan Exp $
"""

__version__ = "2.0"

import sys
if sys.platform == "darwin" :
	# this is my local machine
	sys.path.insert(0,"/Users/ivan/W3C/dev/2004/PythonLib-IH")
	sys.path.insert(0,"/Users/ivan/Library/Python")
else :
	# this is the server on W3C
	sys.path.insert(0,"/usr/local/lib/python2.6/site-packages/PythonLib-IH")
	sys.path.insert(0,"/usr/local/lib/python2.6/site-packages/PythonLib-IH/rdflib-2.4.2")

import cgi
import cgitb; cgitb.enable()
import sys, os
import StringIO
from pyRdfa import processFile, processURI, RDFaError

# to make this thing exist...
uri  = ""
form = cgi.FieldStorage()
# First see if an upload is present in the form
if "uploaded" in form and form["uploaded"].file :
	uri = "uploaded:"
elif "text" in form and form["text"].value != None and len(form["text"].value.strip()) != 0 :
	uri  = "text:"
else :
	if not "uri" in form :
		print 'Content-type: text/html; charset=utf-8'
		print 'Status: 400 Invalid Input'
		print
		print "<html>"
		print "<head>"
		print "<title>Error in RDFa processing</title>"
		print "</head><body>"
		print "<h1>Error in distilling RDFa</h1>"
		print "You should post the uri in the format http://followth.is/cgi-bin/RDFa.py?uri=<em>uri-of-the-web-page-to-distill</em>"
		print "</body>"
		print "</html>"
		sys.exit(1)
	
	try :
		#uri = form["uri"].value
		uri = form.getfirst("uri")
	except :
		print 'Content-type: text/html; charset=utf-8'
		print 'Status: 400 Invalid Input'
		print
		print "<html>"
		print "<head>"
		print "<title>Error in RDFa processing</title>"
		print "</head><body>"
		print "<h1>Error in distilling RDFa</h1>"
		print "No URI has been specified"
		print "</body>"
		print "</html>"
		sys.exit(1)

# Thanks to Sergio and Diego for the idea and code for the referer branch
if uri == "referer" :
	uri    = os.getenv('HTTP_REFERER')
	newuri = "http://www.w3.org/2007/08/pyRdfa/extract?uri=" + uri
	print "Status: 302 Moved"
	print "Location: " + newuri
	print
else :
	if "format" in form.keys() :
		format = form.getfirst("format")
	else :
		format = "pretty-xml"
		
	retval = processURI(uri,format,form)
	if format == "n3" :
		print 'Content-Type: text/rdf+n3; charset=utf-8'
	elif format == "nt" or format == "turtle" :
		print 'Content-Type: text/turtle; charset=utf-8'
	else :
		print 'Content-Type: application/rdf+xml; charset=utf-8'
#       Interestingly, eg, tabulator will not process the RDF output if the status is, for example, 200!			
#		if 'rdfaerror' in os.environ :
#			print 'Status: 400 Invalid Input'
	print
	print retval


