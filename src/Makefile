# Make sure to register your PHP files in PAGES
# and your templates in TEMPLATES.

PAGES=\
	./404.html \
	./at3plusdecoder.html \
	./blog-cn.html \
	./blog.html \
	./contact-cn.html \
	./contact.html \
	./development.html \
	./downloads-cn.html \
	./downloads.html \
	./devbuilds-cn.html \
	./devbuilds.html \
	./faq.html \
	./getgames.html \
	./gethomebrew.html \
	./guide_hardware.html \
	./guides-cn.html \
	./guides.html \
	./index-cn.html \
	./index.html \
	./index_more.html \
	./screenshots-cn.html \
	./screenshots.html \
	./privacy.html

TEMPLATES=\
	header.php \
	footer.php \
	downloads-util.php \
	blog/*

PREFIX=../pub

REALPREFIX=$(realpath $(PREFIX))

$(REALPREFIX)/%.html : %.html $(TEMPLATES)
	@mkdir -p `dirname $@`
	cd `dirname $<`; php `basename $<` > $@

default: $(addprefix $(REALPREFIX)/,$(PAGES)) # staticstuff

#staticstuff:
#	@cp -r static $(REALPREFIX)/
