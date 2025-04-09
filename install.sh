#EXECUTOR LORDHOZOOO
clear
date

echo " install dulu ges module js nya biar kalo di run gak gagal tools nya "
raed -p " enter 
sleep  0.5

termux-setup-storage
termux-change-repo
pkg update -y
pkg upgrade -y
pkg install openssh -y
pkg install git -y
pkg install nodejs

pkg install npm

npm install axios

echo " selesai ges install module  nya ..... "
