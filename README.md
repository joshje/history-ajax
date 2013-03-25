# [History AJAX](http://history-ajax.joshemerson.co.uk)

## Using the HTML5 History API and AJAX to load same domain links

* All same domain links without a target attribute will use the History API where available
* Instead of requesting the link `HREF`, an ajax call will be made to the same endpoint with a get parameter of `ajax=true` appended.
* The contents of this request will be put into an area with ID `main`
* If a navigation bar with an ID of `site-nav` is found, any element within it with an ID matching the first level of the URL path, prepended by `site-nav-` will have the class `active` added to it. For example a link to `/page1/some-sub-page/` will result in the link with ID `#site-nav-page1` having a class `active` added.
* The first `H1` within the requested content will be used for the page title.