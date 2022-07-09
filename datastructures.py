import uuid
data = {
  'brewery_id':[10325,	10325],
  'brewery_name': ['Vecchio Birraio','Vecchio Birraio'],
  'beer_style':['Hefeweizen','English Strong Ale'],
  'beer_name':['Sausa Weizen','Red Moon']
}
print("MAC address:",hex(uuid.getnode()))
for x, y in data.items():
  print(x,":", y)
