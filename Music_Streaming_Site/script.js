let theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

if( theme == 'dark' ){
    document.documentElement.classList.add('dark')
}

document.getElementById('dark-mode-toggle').addEventListener('click', function(){
   document.documentElement.classList.toggle('light')
});





Amplitude.init({
    
    "callbacks": {
        timeupdate: function(){
            let percentage = Amplitude.getSongPlayedPercentage();

            if( isNaN( percentage ) ){
                percentage = 0;
            }

           
            let slider = document.getElementById('song-percentage-played');
            slider.style.backgroundSize = percentage + '% 100%';
        }
    },
    "songs": [
		{
			"name": "Hope -- One Piece",
			"artist": "Namie Amuro",
			"url": "Akano_Hope_From_One_Piece_.mp3",
			"cover_art_url": "https://c-fa.cdn.smule.com/rs-s77/arr/49/12/0781762f-d80d-413a-bae5-6f4c56edac3a.jpg"
		},
		{
			"name": "Blue Bird -- Naruto",
			"artist": "Ikimono-gakari",
		
			"url": "Ikimonogakari_Blue_Bird.mp3",
			"cover_art_url": "https://qph.cf2.quoracdn.net/main-qimg-59e9f464d1aaaeb4e6c65c19245fca05-lq"
		},
		{
			"name": "Uptown Girl",
			"artist": "Billy Joel",
			
			"url": "Billy_Joel_Uptown_Girl.mp3",
			"cover_art_url": "https://vmlbox.com/wp-content/uploads/2022/09/images-1-6.jpeg"
		},
		{
			"name": "Cry Baby -- Tokyo Revengers",
			"artist": "Official HIGE DANdism",
			
			"url": "Miura_Jam_Cry_Baby_Tokyo_Revengers_.mp3",
			"cover_art_url": "https://seeklogo.com/images/T/tokyo-revengers-logo-D200CB2AC8-seeklogo.com.png"
		},
		{
			"name": "Fairy Tail Theme Song",
			"artist": "高梨康治",
			
			"url": "Yasuharu_Takanashi_FAIRY_TAIL_Main_Theme.mp3",
			"cover_art_url": "https://i.pinimg.com/originals/07/2c/66/072c66b9e1add1bb90723b0078a60284.png"
		},
		{
			"name": "Grand Escape -- Tenki No Ko",
			"artist": "RADWIMPS feat.Toko Miura",
			
			"url": "RADWIMPS_Grand_Escape_feat_Toko_Miura_.mp3",
			"cover_art_url": "https://i.scdn.co/image/ab67616d0000b2733e2780c2283bbcb8f5d740d0"
		}
		
    ]
});