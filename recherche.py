# coding: utf8
# ======================================================================|
# NAME: readability.py                                                  |
# AUTHOR: Janhaoui Mohamed Nader, LIF                                   |
# DATE: 16/05/2016                                                      |
#                                                                       |
# VERSION 3.1                                                           |
# 26/10/2016    added help to the Script                                |
# COMMENTS: This script calculates a measure of readability.            |
# firstable  you must install textstat Python Package                   |
# you must make ReSyf in the same directory with this script            |
# this script has one parameter which is the Labelling of text"treetager|  
#Requires -Version 2.1                                                  |
# ======================================================================|

import re
import sys, getopt
import csv  
import codecs
import os
import sys, csv ,operator
from os.path import basename
nplein=""
test=0
test2=0
word=  str(sys.argv[1])
resyf = str("resyf.csv")
text=""
dict1 = dict()
your_list=[]
lemme=[]
Ginresyf=[]
indices=[]
cat= ""
#create two lists From resyf, first list contains all lemmas of ReSyf and the second contains all Resyf Infromation 


with open(resyf, 'r') as f2:
	for line in f2:
		line = line.rstrip()
		mylist2 = line.split(',')
		lemme.append(mylist2[0])
		your_list.append(mylist2)

	
	
	
#in this part of script  we'll calculate the complexity of each word exist in ReSyf according to their position in the sense lists					
if word in lemme:
	
#fin the position of each sens of the word
	for p in range(0,len(lemme)) :
				
		motx =  word.split('|')
			
		if str(lemme[p]) == str(motx[0]):
			#make all the sense position in a list "indices" 
			
			
			indices.append(p)					
	
			#brouse the list of word sens indices 
	mot=your_list[0] 
	cat=mot[1]
	for k in range(0,len(indices)) :
			mot=your_list[indices[k]]
							
			if 	mot[2]=="1":
					test=test+1
			else:
				test2=test2+1
							
					#if word allways in the first postion in her list sens mean that this word easy			
	if 	len(indices)==test:
		print "mot facile" 
		
	
		#if the word alwways in a postion diffirent than 1 mean that this word is hard				 	
	else :
		if  test==0:
			print "mot difficile" 
			 
		else:
			#if this word some time in the first position but other time in other position mean that we cant know if he is easy or not if we dont know the tru sens of word	
			if len(indices)<>test :
				print "mot dés fois facile et des autre difficile selon le contexte" 
						
	text=text+"" 
	x=1	
	for j in range(0,len(indices)) :
	
		mot=your_list[indices[j]]
		print "Sens "+str(x)+":"	
		x=x+1	
		taille=0
		for i in range(0,len(your_list)) :
			
			motresyf=your_list[i]
			if str(mot[3]) == str(motresyf[3]) :
				print str( motresyf[0]) 
				print str( cat)
				print str( motresyf[2]) 
				if i <len(your_list):
					text=text+","
					
							
		
	text=text+"</h4>' > "+ word+"</div>"
	
else:
	text="vide"
	print text
	


