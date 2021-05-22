PHP7=php72
DOC_REPO=https://github.com/arimacdev/php-sigfox-client
DOC_BRANCH=gh-pages
DOC_DIR=./doc/build
DOC_CACHE=./doc/cache
PHPDOC=./phpDocumentor.phar
PSALM_FLAGS=--show-info=true

phpdoc:
	$(PHP7) $(PHPDOC)
phpdoc-clean:
	rm -r $(DOC_DIR) $(DOC_CACHE)
gh-pages:
	gh-pages --repo $(DOC_REPO) --dist $(DOC_DIR) --branch $(DOC_BRANCH)	
codegen:
	./gencode/bin/gencode
phpunit:
	./vendor/bin/phpunit --testdox	
psalm:
	./vendor/bin/psalm $(PSALM_FLAGS)
psalm-clean:
	./vendor/bin/psalm --clear-cache
