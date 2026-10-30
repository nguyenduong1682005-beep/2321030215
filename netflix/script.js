var danhSachPhim = [
    {
    id: 1,
    duongDanAnh: "nobita trong hộp.jpg",
    duongDanYoutube: "https://www.youtube.com/embed/PcnrYtIfmHU?si=1Ae5pReD4MFFMSj3",
    },
    {
    id: 2,
    duongDanAnh: "hop qua bi an.jpg",
    duongDanYoutube: "https://www.youtube.com/embed/PRAf2FkiSs0?si=ldUIuY8Yb-bxpVKs",
    },
    {
    id: 3,
    duongDanAnh: "đia nhac cho bo.jpg",
    duongDanYoutube: "https://www.youtube.com/embed/xHO99BGE6yw?si=wfYZExsjgzif7RID",
    },
    {
    id: 4,
    duongDanAnh: "danh khuyen chukenper.jpg",
    duongDanYoutube: "https://www.youtube.com/embed/Akz0kkx544I?si=TMObkWbk6Xb6SXmh",
    },
    {
    id: 5,
    duongDanAnh: "tuất.jpg",
    duongDanYoutube: "https://www.youtube.com/embed/lmV4dx6PPjQ?si=VBxsMDBD_IX7OKzz",
    }
];
function chonPhim(id){
    for (let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id == id){
            document.getElementsByClassName("banner-img")[0].src = danhSachPhim[i].duongDanYoutube;
        }
    }
}