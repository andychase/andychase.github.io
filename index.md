---
layout: default
---

![Photo of desk](assets/cover_photo.jpg){:height="270px" width="400px"}

# Andy Chase

* [<i class="fa fa-github-alt" aria-hidden="true"></i> github](https://github.com/andychase)
* [<i class="fa fa-flickr" aria-hidden="true"></i>
 flickr](http://www.flickr.com/photos/asperous/sets/)
* [<i class="fa fa-envelope" aria-hidden="true"></i> <theandychase@gmail.com>](mailto:theandychase@gmail.com)
* [<i class="fa fa-linkedin-square" aria-hidden="true"></i> linkedin](https://www.linkedin.com/in/chasean/)
* [[toptal]](https://www.toptal.com/resume/andrew-chase)
{: #social-links .inline-list}

CS, MBA, Certified Analytics Professional

{: #my-title}

{% include posts.html %}

## Projects

{% for project in site.data.projects %}
- 	<a href="{{ project.link }}"><img src="/assets/featured/{{ project.name|slugify }}.png" alt="{{ project.name }}" width="400px" style="display: block;"><span class="project-info">{{ project.year }} &middot; {{ project.type }} &middot; {{ project.tech }}</span></a>
	{: .project-item}
{% endfor %}{: .inline-list}

