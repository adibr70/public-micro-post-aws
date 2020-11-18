# Remove symlink
sudo rm -R /var/www/micropost_old && \
sudo cp -R /var/www/micropost_current /var/www/micropost_old/ && \
sudo rm /var/www/micropost && \
sudo rm -R /var/www/micropost_current && \
# Create symlink to older version
sudo ln -s /var/www/micropost_old /var/www/micropost
# Create a new empty micropost_current folder and change own to ubuntu - in this way rsync will write there
sudo mkdir /var/www/micropost_current
sudo chown -R ubuntu:ubuntu /var/www/micropost_current