RR Whitepaper Embed
===

This repo includes the RR White Paper Embed plugin and closely mirrors the rrcms environment.

## Installation
1. `docker-compose up`
2. Access http://localhost and perform basic WP install (test/test, etc)
3. `docker-compose down`
4. Edit `docker-compose.yml` and uncomment the `WORDPRESS_CONFIG_EXTRA` lines marked for Step 2.
5. `docker-compose up wordpress`
6. Access /wp-admin, navigate to Tools > Network Setup. Complete network setup.
7. `docker-compose down`
8. Edit `docker-compose.yml` and uncomment the `WORDPRESS_CONFIG_EXTRA` lines marked for Step 3.
9. `docker-compose up`
10. `docker-compose exec wordpress /bin/bash`
11. `apt-get update; apt-get install -y vim`
12. `vim .htaccess`, paste `.htaccess` contents from root of repo to enable multi-site routing

1. Create a new site (The "blog" in question)
2. Network activate ACF, Gravity Forms, Partner Solutions
3. activate white paper admin on default site
4. activate white paper client on blog site
5. Create partner solutions user on BLOG site: https://docs.google.com/document/d/1uwZi42WhTGISAde9uN5FzrfedqOdJlCiduspdIavgso/edit
6. Update WP permalink settings to custom `/%category%/%postname%/`
