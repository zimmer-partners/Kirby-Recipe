<?php if(!defined('KIRBY')) exit ?>

title: Receipts
pages:
  template: receipt
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
  receipt_ingridents_heading:
    label: Receipt Ingridents Heading
    type: text
    default: Ingridents
  receipt_preparation_heading:
    label: Receipt Preparation Heading
    type: text
    default: Ingridents
  receipt_date_label:
    label: Date Label
    type: text
    default: Date
  receipt_tags_label:
    label: Tags Label
    type: text
    default: Tags
