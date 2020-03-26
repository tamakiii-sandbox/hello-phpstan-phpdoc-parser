.PHONY: install run clean

install: \
  vendor

vendor:
	composer install

run:
	cat sample.txt | php src/main.php 

clean:
	rm -rf vendor