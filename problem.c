//kullanıcıya 6 elemanlı bir dizi oluşturtup kullanıcıya seçim yaptırıyoruz
// ya ilk 3 elemanın toplamı ya da son 3 elemanın ortalaması
//program bittikten sonra kullanıcıya devam edip etmek istemediğini soruyoruz
// kullanıcının cevabına göre yeniden dizi oluşturtup işlemleri tekrarlatıyoruz.



#include <stdio.h>
#include <stdlib.h>



int main(void)
{
 int sayilar[6];
    int i, ortalama ,cevap , toplam;

   programbasi:

    //Diziye sayıları yazıyoruz
    for(i=0; i<6; i++){

        printf("%d)Sayi Giriniz: ", i+1);
        scanf("%d", &sayilar[i]);

    }

    //Ekrana toplamı yazdır fonksiyonu
void elemantopla(){
        toplam = sayilar[0] + sayilar[1]+ sayilar[2] ;
printf("ilk uc eleman toplami : %d", toplam);
}
//Ortalama hesaplamak için fonksiyon
void ortalamahesapla(){
 ortalama = ( sayilar[3] + sayilar[4] +sayilar[5])/3 ;
   printf("son 3 elemanin ortalamasi ;");
    printf("%d", ortalama);
    }
 printf("\n ");


  int id;

  printf("hangi islemi yapmak istediginizi seciniz \n" );
  printf("ilk 3 elemani yazdirmak \n");
  printf("son 3 elemanin ortalamasini almak \n");

  scanf("%d", &id);

  if (id == 1){
        //elemani ekrana yazdirmak için çağırıyoruz
       elemantopla();
        }

  if (id == 2){
        //ort hesaplama fonksiyonunu çağırıyoruz
ortalamahesapla();
    }
printf("\n\nProgram Basina Donmek icin <1> , Cikmak icin<2> giriniz... ardından enter tusuna basiniz>>> ");
scanf("%d",&cevap);

if(cevap ==1 ){
    goto programbasi;
}
else if (cevap==2){
   return(2);
}


}





