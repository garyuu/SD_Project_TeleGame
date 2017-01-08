class Player:
    def __init__(self, name):
        self.name = name
        self.ready = False
        self.pictures = []

    def ready(self):
        self.ready = True

    def unready(self):
        self.ready = False

    def add_picture(self, picture):
        self.pictures.append(picture)
