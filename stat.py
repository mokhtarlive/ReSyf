from textstat.textstat import textstat
import re
import sys, getopt

nplein=0
inputfile = str(sys.argv[1])
nligne=0
nbphrase=0
dict1 = dict()
destination = open(sys.argv[1]+"stat2.txt", "w")
with open( inputfile , 'r') as f:
    for line in f:
		
		mylist = re.split(r'\t+', line)
		if dict1.get(mylist[0]) <> None:
			dict1[mylist[0]] = dict1[mylist[0]] +1
		else:
			dict1[mylist[0]] = 1
			
		var = textstat.syllable_count(mylist[0])
		if var==0:
			var=0
			if  mylist[1]=="SENT":
					nbphrase=nbphrase+1
		else:	
			var = (var // 1)+1
			nligne=nligne+1
		destination.write( line.rstrip() +"\t"+ str(var)+"\n")	
		if  mylist[1]=="NOM" or mylist[1]=="ADJ" or mylist[1]=="ADV" or mylist[1].find("VER")<>-1:
			nplein=nplein+1
			
		
		

with open( inputfile , 'r') as content_file:
    test_data = content_file.read()      

    print textstat.flesch_reading_ease(test_data)
    print textstat.smog_index(test_data)
    print textstat.flesch_kincaid_grade(test_data)
    print textstat.coleman_liau_index(test_data)
    print textstat.automated_readability_index(test_data)
    print textstat.dale_chall_readability_score(test_data)
    print textstat.difficult_words(test_data)
    print textstat.linsear_write_formula(test_data)
    print textstat.gunning_fog(test_data)
    print textstat.text_standard(test_data)
    print textstat.syllable_count(test_data)
    print nplein
    print (nplein*100)/nligne
    print len(dict1)
    print (len(dict1)*100)/nligne
    print nligne/nbphrase
    print str(nligne)
    print str(nbphrase)
    print (100*(nligne/nbphrase))/35
    content_file.close()
