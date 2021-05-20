PHP7=php72
DOC_REPO=https://github.com/arimacdev/php-sigfox-client
DOC_BRANCH=gh-pages
DOC_DIR=./doc/build
PHPDOC=./phpDocumentor.phar

phpdoc:
	$(PHP7) $(PHPDOC)
gh-pages:
	gh-pages --repo $(DOC_REPO) --dist $(DOC_DIR) --branch $(DOC_BRANCH)	
codegen:
	./gencode/bin/gencode
phpunit:
	./vendor/bin/phpunit --testdox	
	
