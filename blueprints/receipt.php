<?php if(!defined('KIRBY')) exit ?>

title: Receipt
pages: false
files:
  sortable: true
icon: suitcase
fields:
  title:
    label: Title
    type:  text
  food_images:
    label: Images
    type: structure
    fields:
      image:
        label: Image
        type: image
  date:
    label: Date
    type:  date
  ingridents:
    label: Ingridents
    type: structure
    fields:
      amount:
        label: Amount
        type: number
      metrics:
        label: Metrics
        type: tags
      ingrident:
        label: Ingrident
        type: tags
    entry: >
      {{amount}} {{metrics}}  {{ingrident}}
  preparation:
    label: Preparation
    type:  textarea
  tags:
    label: Season
    type:  tags