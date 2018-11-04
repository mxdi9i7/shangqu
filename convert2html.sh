#!/bin/bash
for file in *.php; do php $file > $file.html; done
