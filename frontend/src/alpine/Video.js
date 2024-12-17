export default () => ({
    isPlaying: false,
    play() {
        this.isPlaying = true
        this.$refs.video.controls = true
        this.$refs.video.play()
    },
    stop() {
        this.isPlaying = false
        this.$refs.video.controls = false
        this.$refs.video.pause()
    },
    playBtn: {
        ['@click']: 'play()',
        ['x-show']: '!isPlaying'
    },
    video: {
        ['x-ref']: 'video',
        ['@ended']: 'stop()'
    }
})