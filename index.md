---
layout: default
---

![Photo of desk](assets/cover_photo.jpg){:height="270px" width="400px"}

# Andy Chase

* [<i class="fa fa-github-alt" aria-hidden="true"></i> github](https://github.com/andychase)
* [<i class="fa fa-flickr" aria-hidden="true"></i>
 flickr](http://www.flickr.com/photos/asperous/sets/)
* [<i class="fa fa-envelope" aria-hidden="true"></i> <theandychase@gmail.com>](mailto:theandychase@gmail.com)
* [<i class="fa fa-linkedin-square" aria-hidden="true"></i>linkedin](https://www.linkedin.com/in/chasean/)
* [[toptal]](https://www.toptal.com/resume/andrew-chase)
{: #social-links .inline-list}

B.Sc. CS, MBA, aCAP Candidate.

{: #my-title}

{% include posts.html %}

## Internships, Employment, & Consultancy

{% for job in site.data.employment %}
-  	{% if job.icon %}
	![{{ job.company }}](/assets/job_icons/{{ job.icon }}){:width="16px" height="16px"}
	{% endif %}{% if job.company_website %}<a href="{{ job.company_website }}">{{ job.company }}</a>
	{% else %}
	<span>{{ job.company }}</span>
	{% endif %}<span class="job-info">{{job.type}} &middot; {{job.when}}</span>
	<p>{{ job.company_description }}</p>
{% endfor %}{: .job-list .inline-list}

## Projects

{% for project in site.data.projects %}
- 	<a href="{{ project.link }}"><img src="/assets/featured/{{ project.name|slugify }}.png" alt="{{ project.name }}" width="400px" style="display: block;"><span class="project-info">{{ project.year }} &middot; {{ project.type }} &middot; {{ project.tech }}</span></a>
	{: .project-item}
{% endfor %}{: .inline-list}

