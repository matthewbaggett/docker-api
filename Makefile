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
		-o /local \
	$(MAKE) fix
fix:
	php-cs-fixer fix --config=.php_cs.dist