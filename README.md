This demonstration theme (child theme of twentyseventeen) shows how overriding the default nonce_life value (86400) in the theme breaks the theme customizer in WordPress 4.8.
See: https://core.trac.wordpress.org/ticket/42477

If you activate this theme and then go into the theme customizer, you'll see this behavior:

* Changing a value (e.g., Site Title), then clicking Save & Publish, then refreshing the page will show that the change was not made (it fails silently).
* Changing a value (e.g., Site Title), then blurring the page by clicking outside the window will successfully create a changeset. If you then click Save & Publish, the changeset does get published.
