import pandas as pd
from datetime import datetime
import lib_bamboo as bamboo
import os

totalViolations = 0
totalMatches = 0

os.system('cls') #Deze regel nog invullen! Hoe maak je het scherm leeg?
print("Working...")

data = pd.read_excel("test.xlsx")
data["datum"] = pd.to_datetime(data["datum"], format="%d/%m/%Y")
data = data.sort_values("datum")

#Informatievraag 1
for match in data:
    totalMatches += 1
    totalViolations += match['overtredingen']
    file1 = open("..files/sum.txt", "w", encoding="utf-8")
    file1.write(totalViolations)
    file1.close()


#Informatievraag 2
averageViolations = totalViolations / totalMatches
file2 = open("..files/average.txt", "w", encoding="utf-8")
file2.write(averageViolations)
file2.close()


#Informatievraag 3
data_sorted = data.sort_values('overtredingen', ascending=True)
zwartBoek = data_sorted.head(10) #Deze regel nog invullen! Hoe maak je een top 5?
file3 = open("files/zwartboek.txt", "w", encoding="UTF-8")
file3.write(bamboo.prettify(zwartBoek, type="zwartboek"))
file3.close() #Deze regel nog invullen! Hoe sluit je file3?


#Informatievraag 4









print("Done!")
