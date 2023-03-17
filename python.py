import random

kolonlar = []

while True:
    kolon_sayisi = int(input("Kaç kolon oluşturmak istiyorsunuz? "))

    for i in range(kolon_sayisi):
        banko_sayisi = int(input(f"{i+1}. kolonda kaç tane banko sayı belirlemek istiyorsunuz? (0-6) "))
        banko_listesi = []

        if banko_sayisi > 0:
            while len(banko_listesi) < banko_sayisi:
                banko = int(input(f"{i+1}. kolonda hangi sayı banko olsun? (1-90) "))
                if banko not in banko_listesi:
                    banko_listesi.append(banko)
                else:
                    print("Bu sayı zaten banko olarak seçilmiş, tekrar deneyin.")

        kolon = []

        while len(kolon) < 6:
            sayi = random.randint(1, 90)
            if sayi not in kolon and sayi not in banko_listesi:
                kolon.append(sayi)

        kolon += banko_listesi
        kolon.sort()
        kolonlar.append(kolon)

    print("\nOluşturulan Kolonlar:")
    for i, kolon in enumerate(kolonlar):
        print(f"{i+1}. Kolon: {kolon}")
    print()

    devam = input("Programdan çıkmak istiyor musunuz? (E/H) ")
    if devam.lower() == "e":
        break

print("Programdan çıkıldı.")
