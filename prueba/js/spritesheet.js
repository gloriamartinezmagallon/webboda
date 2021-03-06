

// We keep a global dictionary of loaded sprite-sheets,
// which are each an instance of our SpriteSheetClass
// below.
//
// This dictionary is indexed by the URL path that the
// atlas is located at. For example, calling:
//
// gSpriteSheets['grits_effects.png']
//
// would return the SpriteSheetClass object associated
// to that URL, assuming that it exists.
var lastsprite = null;
var gSpriteSheets = {};

//-----------------------------------------
SpriteSheetClass = Class.extend({

    // We store in the SpriteSheetClass:
    //
    // The Image object that we created for our
    // atlas.
	img: null,

    // The URL path that we grabbed our atlas
    // from.
	url: "",

    // An array of all the sprites in our atlas.
	sprites: [],

	//-----------------------------------------
	init: function () {},

	//-----------------------------------------
    // Load the atlas at the path 'imgName' into
    // memory. This is similar to how we've
    // loaded images in previous units.
	load: function (imgName) {
		// Store the URL of the spritesheet we want.
        this.url = imgName;
        
        // Create a new image whose source is at 'imgName'.
		var img = new Image();
		img.src = imgName;
                

        // Store the Image object in the img parameter.
		this.img = img;
                img.onload = onImageLoad;
                

        // Store this SpriteSheetClass in our global
        // dictionary gSpriteSheets defined above.
		gSpriteSheets[imgName] = this;
	},

	//-----------------------------------------
	// Define a sprite for this atlas
	defSprite: function (name, x, y, w, h, cx, cy) {
        // We create a new object with:
        //
        // The name of the sprite as a string
        //
        // The x and y coordinates of the sprite
        // in the atlas.
        //
        // The width and height of the sprite in
        // the atlas.
        //
        // The x and y coordinates of the center
        // of the sprite in the atlas. This is
        // so we don't have to do the calculations
        // each time we need this. This might seem
        // minimal, but it adds up!
		var spt = {
			"id": name,
			"x": x,
			"y": y,
			"w": w,
			"h": h,
			"cx": cx === null ? 0 : cx,
			"cy": cy === null ? 0 : cy
		};

        // We push this new object into
        // our array of sprite objects,
        // at the end of the array.
		this.sprites.push(spt);
	},

	//-----------------------------------------
    // Parse the JSON file passed in as 'atlasJSON'
    // that is associated to this atlas.
	parseAtlasDefinition: function (atlasJSON) {
        // Parse the input 'atlasJSON' using the
        // JSON.parse method and store it in a
        // variable.

        var parsed = JSON.parse(atlasJSON);

        // For each sprite in the parsed JSON,
        // 'chaingun.png', chaingun_impact.png',
        // etc....
		for(var key in parsed.frames) {
            // Grab the sprite from the parsed JSON...
			var sprite = parsed.frames[key];
                    

			// Define the center of the sprite as an offset
            // (hence the negative).
            // We don't want to have to calculate these
            // values every single time we want to draw a
            // sprite! It adds up!
            if (sprite == null || sprite.frame == null){
                continue
            }
			
                        var ratiow = 1;
    var ratioh = 1;
    var ratio = 1;
    if (sprite.frame.w > canvas.width){
        ratiow = canvas.width/sprite.frame.w;
    }
    if (sprite.frame.h > canvas.height){
        ratioh = canvas.height/sprite.frame.w;
    }
    if (ratiow > ratioh) ratio = ratioh;
    else ratio = ratiow;
                    var cx = -sprite.frame.w  * ratio * 0.5;
			var cy = -sprite.frame.h  * ratio * 0.5;
                        
                        
                        

            // Check if the sprite is trimmed based on the
            // 'trimmed' parameter in the parsed JSON. Look
            // through the provided JSON if you're unsure
            // where this is.
            // If it is trimmed, then we need to update the
            // center offset based upon how much data has
            // been trimmed off of it.
            //
            // This will be based on the 'spriteSourceSize'
            // and 'sourceSize' fields of the sprite.
            //
            // 'spriteSourceSize' defines:
            //
            // 1)
            //
            // 'sourceSize' defines:
            //
            // 1)
			//
            // This shouldn't be much code, but it's a bit of
            // tricky math, so you might have to think about
            // this for a bit. If it's done right, you shouldn't
            // have to change any other code at all!
            //
            // YOUR CODE HERE
            if (sprite.trimmed){
                cx = sprite.spriteSourceSize.x - (sprite.sourceSize.w * 0.5);
                cx = sprite.spriteSourceSize.y - (sprite.sourceSize.h * 0.5);
            }
            
			// Define the sprite for this sheet by calling
            // defSprite to store it into the 'sprites' Array.
			this.defSprite(key, sprite.frame.x, sprite.frame.y, sprite.frame.w, sprite.frame.h, cx, cy);
		}
	},

	//-----------------------------------------
	// Walk through all the sprite definitions for this
    // atlas, and find which one matches the name.
	getStats: function (name) {
            
        // For each sprite in the 'sprites' Array...
		for(var i = 0; i < this.sprites.length; i++) {
            
            // Check if the sprite's 'id' parameter
            // equals the passed in name...
            if(this.sprites[i].id === name) {
                // and return that sprite if it does.
                lastsprite = i;
                return this.sprites[i];
            }

		}

        // If we don't find the sprite, return null.
		return null;
	}

});

//-----------------------------------------
// External-facing function for drawing sprites based
// on the sprite name (ie. "chaingun.png", and the
// position on the canvas to draw to.
function drawSprite(spritename, posX, posY) {
// Walk through all our spritesheets defined in
    // 'gSpriteSheets' and for each sheet...
    
	for(var sheetName in gSpriteSheets) {

        // Use the getStats method of the spritesheet
        // to find if a sprite with name 'spritename'
        // exists in that sheet...
		var sheet = gSpriteSheets[sheetName];
                //console.log(sheet);
		var sprite = sheet.getStats(spritename);

        // If we find the appropriate sprite, call
        // '__drawSpriteInternal' with parameters as
        // described below. Otherwise, continue with
        // the loop...
        if(sprite === null) {
            console.log(gSpriteSheets); console.log(sheet);
            continue;
        }

		__drawSpriteInternal(sprite, sheet, posX, posY);

        // Once we've called __drawSpriteInternal, we
        // assume there isn't another sprite of the
        // given 'spritename' that we want to draw,
        // so we return.
        // If you make this assumption, make sure
        // your design team doesn't make sprites with
        // the same name!
		return;
	}
}

//-----------------------------------------
// External-facing function for drawing sprites based
// on the sprite object stored in the 'sprites Array,
// the 'SpriteSheetClass' object stored in the
// 'gSpriteSheets' dictionary, and the position on
// canvas to draw to.
function __drawSpriteInternal(spt, sheet, posX, posY) {
	// First, check if the sprite or sheet objects are
    // null.
    if (spt === null || sheet === null) {
        return;
    }
    
    var ratiow = 1;
    var ratioh = 1;
    var ratio = 1;
    if (spt.w > canvas.width){
        ratiow = canvas.width/spt.w;
    }
    if (spt.h > canvas.height){
        ratioh = canvas.height/spt.h;
    }
    if (ratiow > ratioh) ratio = ratioh;
    else ratio = ratiow;
    

    var hlf = {
		x: spt.cx,
		y: spt.cy
	};
        context.drawImage(sheet.img, spt.x, spt.y, spt.w, spt.h, posX + hlf.x, posY + hlf.y, spt.w*ratio, spt.h*ratio);
}
