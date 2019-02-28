#!D:\serranomorante\Projects\Development\Python\environment\VirtualENV\default\Scripts\python

import os, openpyxl
os.path.dirname(os.path.abspath(__file__))

wb = openpyxl.load_workbook('.\\resources\\11_menu_talento_humano.xlsx')
ws = wb.active
maxRow = ws.max_row

for row in range(2, maxRow + 1):
    if row == 1:
        ws.cell(row=row, column=2).value
    elif row == 2:
        ws.cell(row=row, column=2).value
    elif row == 37:
        ws.cell(row=row, column=2).value
    elif row == 49:
        ws.cell(row=row, column=2).value
    elif row == 79:
        ws.cell(row=row, column=2).value
    else:
        pass
        
