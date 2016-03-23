---
views:
    main:
        data:
            class: blog

    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            meta: 
                type: toc
                items: 4

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta: 
                type: toc
                items: 4

    block-more:
        region: sidebar-right
        template: default/block
        sort: 3
        data:
            meta: 
                type: single
                route: blog/block-more
---
Development blog
===========================

Posts about development, documentation, articles on how to use CImage and info on image processing in general.