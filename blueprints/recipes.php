<?php if(!defined('KIRBY')) exit ?>

title: Recipes
pages:
  template: recipe
  num:
    mode: date
    field: date
  sort: flip
files: false
icon: cutlery
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  projects_configuration:
    label: Projects Configuration
    type: headline
  recipe_ingridents_heading:
    label: Recipe Ingridents Heading
    type: text
    default: Ingridents
  recipe_preparation_heading:
    label: Recipe Preparation Heading
    type: text
    default: Ingridents
  recipe_date_label:
    label: Date Label
    type: text
    default: Date
  recipe_tags_label:
    label: Tags Label
    type: text
    default: Tags
