#!/usr/bin/env python3

import random

def random_year():
    return random.choice(["FR", "SO", "JR", "SR"])

lines = []

with open("movement1.csv") as file:
    for line in file:
        lines.append(line.strip().split(","))

map = []

for line in lines:
    l = line[0] + ",'" + line[0].split(" ")[1] + ",\'Lacrosse\'"
    if l not in map:
        print(l + ",\'" + random_year() + "\'")
        map.append(l)
