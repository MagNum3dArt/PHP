function swfLoader(movieSWF, FLVcontentPath){
var so = new SWFObject(movieSWF, "mymovie", "640", "515", "7", "#000000");
if (FLVcontentPath!=''){ 
so.addVariable("FLVpath", FLVcontentPath);
}
so.write("flashcontent");
}
