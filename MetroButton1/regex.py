#!D:\serranomorante\Projects\Development\Python\environment\VirtualENV\default\Scripts\python

import re, os, time
# from bs4 import BeautifulSoup

os.path.dirname(os.path.abspath(__file__))

html = open('index.html', 'r')
readHtml = html.read()
# soup = BeautifulSoup(readHtml, 'html.parser')

# matches = re.findall("data-tile=\"\d{1,3}\"", readHtml)
# replace = re.sub("data-tile=\"\d{1,3}\"", "data-tile=\"{}\"", readHtml).format(*map(lambda x: x + 1, [i for i in range(len(matches))]))
# new_matches = re.findall("data-tile=\"\d{1,3}\"", replace)
matches = re.findall("content__item\"\sid=\"\d{1,3}\"", readHtml)
replace = re.sub("content__item\" id=\"\d{1,3}\"", "content__item\" id=\"{}\"", readHtml).format(*map(lambda x: x + 1, [i for i in range(len(matches))]))

# content = soup.find('div', class_="content")
# print(content)
# content__item = soup.find_all("div", class_="content__item")
# print(len(content__item))

# Append related buttons to expand
# new_content_item = """<div class="content__item" id="4">
#     <div class="content-wrap">
#       <div data-role="tile" data-effect="hover-slide-up" class="bg-red">
#         <div class="slide-front"><img src="media/wallet.png" class="icon"></div>
#         <span class="branding-bar">Cartera</span>
#         </div>
#     </div>
#   </div>"""

# new_tag_content_item = soup.new_tag("div", class_="")

# for i in range(len(matches)):
#     content.append(new_content_item)

# print(content)


with open('index_new_2.html', 'w') as f:
    f.writelines(replace)

