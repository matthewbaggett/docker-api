.PHONY: download-spec generate
all: generate
download-spec:
	curl https://docs.docker.com/reference/engine/v1.43.yaml -o docker-api.yaml
generate: download-spec
	docker run --rm \
		--user $(shell id -u) \
		-v $(shell pwd):/local openapitools/openapi-generator-cli generate \
		-i /local/docker-api.yaml \
		-g php \
		--additional-properties=composerPackageName=matthewbaggett/docker-api-php-client \
		--additional-properties=artifactVersion=1.43.0 \
		--additional-properties=invokerPackage=MatthewBaggett\\Docker\\Api \
		-o /local

	$(MAKE) fix
fix:
	vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php