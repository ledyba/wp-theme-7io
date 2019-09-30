.PHONY: deploy;

deploy:
	git push
	ssh 7io.org "cd /opt/www/7io.org/wp/wp-content/themes/scrappy && git pull"
