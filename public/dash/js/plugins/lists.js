class Lists{constructor(){"undefined"!=typeof List?(this._initExistingHtmlList(),this._initExistingHtmlListScrollbar(),this._initAddingViaJS(),this._initSortAndFilter(),this._initSortFilterAndPagination()):console.log("List is undefined!")}_initExistingHtmlList(){if(document.getElementById("existingHtmlList"))new List("existingHtmlList",{valueNames:["name","position"]})}_initExistingHtmlListScrollbar(){if(document.getElementById("existingHtmlListScrollbar"))new List("existingHtmlListScrollbar",{valueNames:["name","position"],listClass:"os-content"})}_initAddingViaJS(){if(document.getElementById("addingViaJS"))new List("addingViaJS",{item:"addingViaJSlItemTemplate",valueNames:["name",{name:"image",attr:"src"}]},[{name:"Peg Bread",image:"img/product/small/pullman-loaf.jpg"},{name:"Tunnbröd",image:"img/product/small/steirer-brot.jpg"},{name:"Samoon",image:"img/product/small/barmbrack.jpg"},{name:"Rieska",image:"img/product/small/baguette.jpg"}])}_initSortAndFilter(){if(document.getElementById("sortAndFilter")){var t=new List("sortAndFilter",{valueNames:["name","category","sale"],listClass:"os-content"});document.querySelectorAll("#sortAndFilter .filter").forEach((i=>{i.addEventListener("change",(i=>{!function(){let i=[];document.querySelectorAll("#sortAndFilter .filter:checked").forEach((t=>{i.push(t.getAttribute("data-filter"))})),t.filter((t=>i.indexOf(t.values().category.trim())>=0))}()}))}))}}_initSortFilterAndPagination(){if(document.getElementById("pagination")){var t=new List("pagination",{valueNames:["name","category","sale"],page:3,pagination:[{includeDirectionLinks:!0,leftDirectionText:'<i class="cs-chevron-left"></i>',rightDirectionText:'<i class="cs-chevron-right"></i>',liClass:"page-item",aClass:"page-link shadow",innerWindow:1e3}]});document.querySelectorAll("#pagination .filter").forEach((i=>{i.addEventListener("change",(i=>{!function(){let i=[];document.querySelectorAll("#pagination .filter:checked").forEach((t=>{i.push(t.getAttribute("data-filter"))})),t.filter((t=>i.indexOf(t.values().category.trim())>=0))}()}))}))}}}