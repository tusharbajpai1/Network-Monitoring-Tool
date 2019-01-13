#!/bin/sh
#############################################
### command to start the packet capturing ###
/usr/sbin/tcpdump -ne -c 100 -i wlp2s0> /var/www/html/packet


grep "ARP" packet >arp
grep "UDP" packet >udp
grep "TCP" packet >tcp

######################################################################
### cut different field from the IP packets which are place in tcp###
cut -d " " -f1 tcp > tcp_time
cut -d " " -f2 tcp > tcp_srcadd
cut -d " " -f4 tcp > ip11
cut -d "," -f1 ip11 > tcp_dstadd
cut -d " " -f9 tcp > ip12
cut -d ":" -f1 ip12 > tcp_length
cut -d " " -f10 tcp > ip13
cut -d "." -f5 ip13 > tcp_srcport
cut -d "." -f1,2,3,4 ip13 > tcp_dstport
cut -d " " -f12 tcp > ip14
cut -d "." -f5 ip14 > tcp_srcmac
cut -d ":" -f1 ip15 > tcp_dstmac
cut -d "." -f1,2,3,4 ip14 > ip6

############################################################################
### combine all the 8 field and place it into a single file named as tcpall###
paste tcp_time tcp_srcadd tcp_dstadd tcp_length tcp_srcport tcp_dstport tcp_srcmac tcp_dstmac > tcpall.php


######################################################################
### cut different field from the ARP packets which are place in arp###
cut -d " " -f1 arp > arp_time
cut -d " " -f2 arp > arp_srcmac
cut -d " " -f4 arp > arp10
cut -d "," -f1 arp10 > arp_dstmac
cut -d " " -f12 arp > arp_srcadd
cut -d " " -f14 arp > arp6
cut -d "," -f1 arp6 >arp_dstadd
cut -d " " -f16 arp > arp_length
############################################################################
### combine all the 8 field and place it into a single file named as arpall###
paste arp_time arp_srcmac arp_dstmac arp_srcadd arp_dstadd arp_length > arpall.php


######################################################################
### cut different field from the UDP packets which are place in udp###
cut -d " " -f1 udp > udp_time
cut -d " " -f2 udp > udp_srcmac
cut -d " " -f4 udp > udp10
cut -d "," -f1 udp10 > udp_dstmac
cut -d " " -f10 udp > udp13
cut -d "." -f5 udp13 > udp_srcport
cut -d "." -f1,2,3,4 udp13 > udp_srcadd
cut -d " " -f12 udp > udp14
cut -d "." -f5 udp14 > udp15
cut -d ":" -f1 udp15 > udp_dstport
cut -d "." -f1,2,3,4 udp14 > udp_dstadd
cut -d " " -f15 udp > udp16
cut -d " " -f1 udp16 > udp_length
############################################################################
### combine all the 8 field and place it into a single file named as udpall###
paste udp_time udp_srcmac udp_dstmac udp_srcadd udp_dstadd udp_length udp_srcport udp_dstport > udpall.php


#############################################################################
#####combine all the protocol files into single one #########################

paste udpall.php tcpall.php arpall.php > all.php




