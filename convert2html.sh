#!/bin/bash
for file in *.html; do php $file > $file.html; done
