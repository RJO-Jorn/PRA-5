import pandas as pd
from datetime import datetime
import lib_bamboo as bamboo
import os

os.system("cls")
print("Working...")

data = pd.read_excel("python/Basketbal_Talent League_tussenstand copy.xlsx")
data["datum"] = pd.to_datetime(data["datum"], format="%d/%m/%Y")
data = data.sort_values("datum")

totalFouls = data["overtredingen"].sum()
file1 = open("files/sum.txt", "w", encoding="UTF-8")
file1.write(str(totalFouls))
file1.close()

averageFouls = data["overtredingen"].mean()
file2 = open("files/average.txt", "w", encoding="UTF-8")
file2.write(str(round(averageFouls)))
file2.close()

zwartBoek = data.sort_values("overtredingen", ascending=False).head(5)
file3 = open("files/zwartboek.txt", "w", encoding="UTF-8")
file3.write(bamboo.prettify(zwartBoek, type="zwartboek"))
file3.close()

filter1 = (data["datum"] > datetime(2020, 12, 21))
ereGalerij = data[filter1]
filter2 = (ereGalerij["overtredingen"] < 2)
ereGalerij = ereGalerij[filter2]
file4 = open("files/eregalerij.txt", "w", encoding="UTF-8")
file4.write(bamboo.prettify(ereGalerij, type="eregalerij"))
file4.close()

data["datum"] = data["datum"].dt.strftime("%Y-%m")
draaitabel_scheids = data.pivot_table(
    index="scheidsrechter",
    columns="datum",
    values="overtredingen",
    aggfunc=sum
)

file5a = open("files/draaitabel_scheids.txt", "w", encoding="UTF-8")
file5a.write(bamboo.prettify(draaitabel_scheids))
file5a.close()

draaitabel_stadion = data.pivot_table(
    index="stadion",
    columns="datum",
    values="bezoekersaantal",
    aggfunc=sum
)

file5b = open("files/draaitabel_stadion.txt", "w", encoding="UTF-8")
file5b.write(bamboo.prettify(draaitabel_stadion))
file5b.close()


print("Done!")