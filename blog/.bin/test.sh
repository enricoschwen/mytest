#!/bin/bash

vendor/bin/codecept run --debug --colors
vendor/bin/parallel-lint --exclude app --exclude vendor ./