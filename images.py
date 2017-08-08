from PIL import Image
import sys

def convertImage():
	argv=[];
	argv.append('')
	argv.append(sys.argv[1])
	argv.append(sys.argv[2])
	
	pathArr=argv[2].split(',')

	if(argv[1]=="author"):
		for path in pathArr:
			path="public"+path
			file=Image.open(path)
			file=file.resize((50,50),Image.ANTIALIAS)
			pathArr=path.split('.')
		 	outPath= pathArr[0]+"_50."+pathArr[1]
			file.save(outPath,quality=80,optimize=True)

	if(argv[1]=="blog"):
		for path in pathArr:
			path="public"+path
			file=Image.open(path)
			file60=file.resize((60,60),Image.ANTIALIAS)
			pathArr=path.split('.')
		 	outPath= pathArr[0]+"_60."+pathArr[1]
			file60.save(outPath,quality=80,optimize=True)

			file250=file.resize((350,250),Image.ANTIALIAS)
			pathArr=path.split('.')
		 	outPath= pathArr[0]+"_250."+pathArr[1]
			file250.save(outPath,quality=80,optimize=True)

if __name__ =="__main__":
	convertImage()
