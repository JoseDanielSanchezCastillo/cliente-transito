import os
import numpy as np
import codecs
import random
from collections
import Counter
from sklearn.feature_extraction.text
import CountVectorizer
from sklearn.metrics.pairwise
import cosine_similarity# from graphics
import *
from math
import ceil

def get_cosine_sim( * strs):
   vectors = [t
      for t in get_vectors( * strs)
   ]
return cosine_similarity(vectors)

def get_vectors( * strs):
   text = [t
      for t in strs
   ]
vectorizer = CountVectorizer(text)
vectorizer.fit(text)
return vectorizer.transform(text).toarray()

# MAIN
print("MAIN ")
k = 3
n = len(os.listdir('./textos'))
print(n)
nombres = list()
S = list()
for f in os.listdir('./textos'):
   nombres.append(f)
file1 = codecs.open('./textos/' + f, encoding = 'utf-8', errors = 'ignore')
fS = file1.read()
S.extend([fS])
M_S = get_cosine_sim( * S)# print(M_S)
R = set()# representantes

while True:
   R.add(random.randint(0, n - 1))
if len(R) == k:
   break;
print(R)# punto flotante
while True:
   cluster = list()# asigno
for fila in M_S:
   mi_r = 0
sim = 0
for r in R:
   if fila[r] > sim:
   sim = fila[r]
mi_r = r
cluster.append(mi_r)
print("Representante de cada:")
print(cluster)# calcullo cercania con todos los miem del cluster
new_R = set()
invCerca = np.zeros(len(cluster))
for i in range(0, len(cluster) - 1):
   for x in range(0, len(cluster) - 1):
   if cluster[i] == cluster[x]:
   invCerca[i] += M_S[i][x]
print("Cercania con todos los miembros del cluster:")
print(invCerca)# el r de cada cluser es el mismo
aux = dict()
for r in R:
   aux[r] = r# cambio el del cluster si hay otro mejor
for j in range(0, len(invCerca) - 1):
   if invCerca[j] > invCerca[aux[cluster[j]]]:
   aux[cluster[j]] = j
print("Nuevos r de cada cluster:")
print(aux)# agrego nuevo r a new_r
for r in R:
   new_R.add(aux[r])
if len(R.intersection(new_R)) == k: #PARE
ct = dict()
for r in R:
   ct[r] = list()
for m in range(0, len(cluster) - 1):
   ct[cluster[m]].append(nombres[m])
print(ct)
break
else :
   R = new_R
print(R)