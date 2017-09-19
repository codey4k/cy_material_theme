import gulp from 'gulp'
import sass from 'gulp-sass'
import autoprefixer from 'gulp-autoprefixer'

const ruta = {
    entrada: './sass/*.sass', //entrada
    salida: './' //salida
}

gulp.task('style',() => {
    gulp.src( ruta.entrada )
        .pipe(sass())
        .pipe(gulp.dest( ruta.salida ))
})

gulp.task('default', ()=>{
    gulp.watch(ruta.entrada, ['style'])
})