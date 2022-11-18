function robot(x){
    switch(x) {
        case 0: 
            metin = "kapalı";
            break;
        case 1:
            metin = "açık";
            break;
        default:
            metin = "Değer yanlış";
    }
    return metin;
}