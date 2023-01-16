import pandas as pd
import os

# file = pd.read_excel('test.xlsx')
# print(file)
# os.system('pause')

file2 = open("test.txt", 'r')
contents = file2.read()
print(contents)
file2.close()
os.system('pause')