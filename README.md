Absolutify
==========

[Absolutify][1] is a [WordPress][2] plugin by [Benedict Eastaugh][3] which
turns relative <abbr title="Uniform Resource Identifiers">URIs</abbr> in posts,
pages and comments into absolute ones (see [RFC 1630][4] for details of
absolute and relative URIs).


Usage
-----

To use Absolutify, simply install the plugin and instead of writing
`http://example.org/my-link/` (where `example.org` is the address of your
WordPress site) in your posts, simply write `/my-link/` (initial slash
required). The plugin will then resolve that relative URI to an absolute one.


Advantages
----------

If your content gets loaded in a context outside your site, such as a feed
reader, then relative URIs won't work--only absolute ones will. Absolutify lets
you use the convenient, shorter format of relative URIs, while ensuring that
your links will still work in all contexts.

It can also be useful if you change the location of your site. For example, you
might move from one domain to another, or move your blog from a subdirectory on
your site to the domain root. Absolutify will ensure that all the links in your
posts still work.


  [1]: http://github.com/ionfish/absolutify
  [2]: http://wordpress.org/
  [3]: http://extralogical.net/
  [4]: http://www.ietf.org/rfc/rfc1630.txt
