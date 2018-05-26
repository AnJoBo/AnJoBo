function loadContent() {
    
    THREE.Cache.enabled = true;    
    var loader = new THREE.FileLoader();
    loader.load(
        "../html/bio.txt",
        function(data) {
            var bio = document.getElementById("bio");
            bio.setAttribute("text", {value: data});
        }
    );
    loader.load(
        "../html/resume.txt",
        function(data) {
            var resume = document.getElementById("resume");
            resume.setAttribute("text", {value: data});
        }
    );
    loader.load(
        "../html/projects.html",
        function(data) {
            var projects = document.getElementById("projects");
            projects.setAttribute("text", {value: data});
        }
    );

}

