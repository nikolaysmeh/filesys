const fs = require('fs-extra')

let copy = {
  './src/public/js': './../../public/vendor/crip/cripfilesys/js'
}

Object.keys(copy).forEach(from => {
  let to = copy[from]

  fs.copy(from, to, function (err) {
    if (err) {
      return console.error(err)
    }

    console.log(`${from} Copied to ${to}`)
  })
})