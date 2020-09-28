i=/local/docs/crpt-nc-api.yaml

build: generate fix test

generate: clean
	docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate \
        -i $(i) \
        -g php \
        -o /local/tmp \
        -c /local/openapi-generator-php-config.json \
        --global-property apiTests=false,modelTests=false,apiDocs=false,modelDocs=false && \
	cp -R ./tmp/src/* ./src && \
	rm -rf ./tmp && \
	git add --all

clean:
	rm -rf ./src
	mkdir ./src

test:
	docker run --rm -v ${PWD}:/app php:7.2-cli-stretch /app/vendor/bin/phpunit /app/tests

fix:
	docker run --rm -v ${PWD}:/app php:7.2-cli-stretch /app/vendor/bin/php-cs-fixer fix --config=/app/.php_cs --allow-risky=yes