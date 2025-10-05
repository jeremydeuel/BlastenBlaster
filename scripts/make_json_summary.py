# this script generates a json file containing all images
import json
import os

source_path = "images/cells"
cells = os.listdir(source_path)
json_cells = []
for cell in cells:
    json_cells.append({
        'type': cell[4],
        'sample': cell[6:12],
        'id': int(cell[13:16]),
        'path': cell
    })

with open("images/cells.json", "w") as f:
    json.dump(json_cells,f)