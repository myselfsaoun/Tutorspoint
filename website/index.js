switch (document.URL) {
    case "http://127.0.0.1:5500/html/Index.html":
        document.querySelector('.index').classList.add('active')
        break

    case "http://127.0.0.1:5500/html/job.html":
        document.querySelector('.job').classList.add('active')
        break

    case "http://127.0.0.1:5500/html/services.html":
        document.querySelector('.services').classList.add('active')
        break

    case "http://127.0.0.1:5500/html/about.html":
        document.querySelector('.about').classList.add('active')
        break

    case "http://127.0.0.1:5500/html/contact.html":
        document.querySelector('.contact').classList.add('active')
        break

    case "http://127.0.0.1:5500/html/feedback.html":
        document.querySelector('.feedback').classList.add('active')
        break

    default:
        break
}