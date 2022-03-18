function _(x) {return document.getElementById(x)}
function popUp(item) {
    if(item === 'question'){
        _('itemHeader').innerHTML="Example"
        _('itemDescription').innerHTML="A popUp like this will appear when the icon is clicked. <br> Press anywhere on the screen to close."
    }

    if(item === 'webpage'){
        _('itemHeader').innerHTML="Web page"
        _('itemDescription').innerHTML="An online page that consists of your content.<br> This is where all your links land, you can add as many as desired. <br> We insert approved content."
    }

    if(item ==='form'){
        _('itemHeader').innerHTML="Form"
        _('itemDescription').innerHTML="A form helps with signups and surveys, or just contact.<br> This goes well with CMS to view sent info."
    }

    if(item === 'gallery'){
        _('itemHeader').innerHTML="Photo gallery"
        _('itemDescription').innerHTML="A gallery allows you to showcase your work in the form of images.<br> Choose the number of 'gallery' you need, 5 images each."
    }

    if(item === 'content'){
        _('itemHeader').innerHTML="Content Management System"
        _('itemDescription').innerHTML="This System allows you to make changes to your website, upload content,<br> read messages. Basically control your website. <br> Each CMS controls one page, to edit more pages you will need more CMS."
    }

    if(item === 'logo'){
        _('itemHeader').innerHTML="Logo Design"
        _('itemDescription').innerHTML="This is self explanatory, select this if you need a new logo<br> or update yours to a web friendly Logo, which is scalable."
    }

    if(item === 'ssl'){
        _('itemHeader').innerHTML="SSL/TLS Certificate"
        _('itemDescription').innerHTML="Secure Sockets Layer activates the padlock and the https protocol <br> it allows secure connections from a web server to a browser."
    }

    if(item === 'protection'){
        _('itemHeader').innerHTML=" Privacy protection"
        _('itemDescription').innerHTML="This prevents your personal information from being exposed, <br> minimizes phishing attacks and spamming. <br> This is a crucial part of keeping your online business secure."
    }

    if(item === 'domain'){
        _('itemHeader').innerHTML="Domain info. locker"
        _('itemDescription').innerHTML="This is an internal lock that your domain registrar <br> place on your domain in an effort to keep them from being transferred  <br> or moved to another account by anyone other than the owner."
    }

    if(item === 'chat'){
        _('itemHeader').innerHTML="Basic Chat Zone"
        _('itemDescription').innerHTML="This chat zone allows your users to interact with each other<br> This is mostly useful on websites with comments section."
    }

    if(item === 'webmail'){
        _('itemHeader').innerHTML="Webmail"
        _('itemDescription').innerHTML="An email system in which a user can access their emails via a browser on any computer <br> or device that is connected to the Internet. These are custom emails e.g. info@yourwebsite.com"
    }

    if(item === 'economy'){
        _('itemHeader').innerHTML="Economy Hosting"
        _('itemDescription').innerHTML="This web hosting plan is suitable for hosting a single website <br> this shared plan is managed in-house<br> <br> <b>Economy includes the following -: </b> <br> Disk Space : 5gig hdd <br> Bandwidth : 1tb in-bound and out-bound traffic"
 }

    if(item === 'duluxe'){
        _('itemHeader').innerHTML="Duluxe Hosting"
        _('itemDescription').innerHTML="This web hosting plan is suitable for hosting a website with multiple subdomains under a single hosting plan<br> this is a mid-tier hosting plan <br><br> <b>Duluxe includes the following -: </b><br> Disk Space : 5gig + 2gig hdd (mirrored) <br> Bandwidth : 2tb in-bound and out-bound traffic"
    }

    if(item === 'premium'){
        _('itemHeader').innerHTML="Premium Hosting"
        _('itemDescription').innerHTML="This premium plan is suitable for websites with high traffic, and lots of content <br> as it comes with high performing bandwidth, amongst other features. <br><br><b>Premium includes the following -: </b><br> Disk Space : 5 gig + 5 gig HDD (mirrored)<br> Bandwidth : 5tb in-bound and out-bound traffic"
    }

    if(item === 'gDesign'){
        _('itemHeader').innerHTML="General Design"
        _('itemDescription').innerHTML="General design has the basic layout, this comes as a default for a Bronze website/package."
    }

    if(item === 'pDesign'){
        _('itemHeader').innerHTML="Premium Design"
        _('itemDescription').innerHTML="This premium design offers a themed layout throughout the website, with eye-catchy look."
    }

    if(item === 'cDesign'){
        _('itemHeader').innerHTML="Custom Design"
        _('itemDescription').innerHTML="The Custom design includes the Premium design features with your personal touch and a unique-style layout."
    }

    if(item === 'pSEO'){
        _('itemHeader').innerHTML="Premium SEO"
        _('itemDescription').innerHTML="SEO stands for Search Engine Optimization and it is the process of optimizing your website <br> and online presence in order for Google to rank your website organically. <br><br><b> Premium SEO includes-: </b><br> Off-page SEO <br> Robots <br> Sitemap"
    }

    if(item === 'proSEO'){
        _('itemHeader').innerHTML="Profesional SEO"
        _('itemDescription').innerHTML="SEO stands for Search Engine Optimization and it is the process of optimizing your website <br> and online presence in order for Google to rank your website organically. <br><br><b> Profesional SEO includes -: </b><br> keywords <br> Metatags <br> On-page SEO <br> With all the basic SEO benefits"
    }


    if(item === 'uSEO'){
        _('itemHeader').innerHTML="Ultimate SEO"
        _('itemDescription').innerHTML="SEO stands for Search Engine Optimization and it is the process of optimizing your website <br> and online presence in order for Google to rank your website organically. <br><br><b>Ultimate SEO includes -: </b><br> Search Engine Submissions <br> Reports <br> Directory Submission <br> Local listings <br> With all the Premium SEO benefits "
    }


}



// contact us faqs

function activefaq(item) {
    if(item === "item1"){
        _('item1').setAttribute('class','active single-item')
        _('content1').style.display="block"
        _('item2').setAttribute('class','single-item')
        _('content2').style.display="none"
        _('item3').setAttribute('class','single-item')
        _('content3').style.display="none"
        _('item4').setAttribute('class','single-item')
        _('content4').style.display="none"
    }

    if(item === "item2"){
        _('item1').setAttribute('class','single-item')
        _('content1').style.display="none"
        _('item2').setAttribute('class','active single-item')
        _('content2').style.display="block"
        _('item3').setAttribute('class','single-item')
        _('content3').style.display="none"
        _('item4').setAttribute('class','single-item')
        _('content4').style.display="none"
    }

    if(item === "item3"){
        _('item1').setAttribute('class','single-item')
        _('content1').style.display="none"
        _('item2').setAttribute('class',' single-item')
        _('content2').style.display="none"
        _('item3').setAttribute('class','active single-item')
        _('content3').style.display="block"
        _('item4').setAttribute('class','single-item')
        _('content4').style.display="none"
    }

    if(item === "item4"){
        _('item1').setAttribute('class','single-item')
        _('content1').style.display="none"
        _('item2').setAttribute('class',' single-item')
        _('content2').style.display="none"
        _('item3').setAttribute('class','single-item')
        _('content3').style.display="none"
        _('item4').setAttribute('class','active single-item')
        _('content4').style.display="block"
    }
}