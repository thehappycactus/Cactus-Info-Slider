The Cactus Info Slider is a WordPress plugin.  As opposed to the many sliders that exist whose main purpose is to showcase photos, Info Slider's main purpose is to showcase information.  Its best use is for anyone looking to display a step-by-step process with both text and a visual aid.

How to Use:
Info Slider uses simple shortcodes to construct a set of slides.

- [cactus-slider] - Open and close your entire set of slides with this shortcode.
- [slider-item] - Open and close a single slide with this shortcode.  All informational text you want displayed should be between this open/close shortcode.
	- [slider-item nbr="1"] - The "nbr" attribute gives the slide a numerical value for easier tracking.
	- [slider-item title="My Slide"] - The "title" attribute gives the slide a title, which will be represented as an h2 header.
	- [slider-item img="http://server.com/myImage.jpg"]  - the "img" attribute is a URL to the image you want to be associated with the slide.

Full Example:

[cactus-slider]

	[slider-item nbr="1" title="Melt Butter" img="http://myserver.com/butter.jpg"]
	    To make red velvet brownies, first melt a stick of butter in a small saucepan.
	[/slider-item]

	[slider-item nbr="2" title="Mix All Ingredients" img="http://myserver.com/batter.jpg"]
	    Mix the butter with your dry ingredients and red food dye to create a batter.
	[/slider-item]

	[slider-item nbr="3" title="Bake In Pan" img="http://myserver.com/brownies.jpg"]
	    Finally, put batter in a greased 9x9" pan and bake for 20 minutes at 350F.
	[/slider-item]

[/cactus-slider]