<?php

namespace App\Entity;

use App\Repository\PDFRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PDFRepository::class)
 * @ORM\Table(name="pdf",indexes={@ORM\Index(name="i_filename_hash", columns={"filename_hash"})})
 */
class PDF
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private ?string $filename_original;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private ?string $filename_hash;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $page_cnt;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $size_in_bytes;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $uploaded_at;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private ?string $preview_image_filename;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $attachment_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilenameOriginal(): ?string
    {
        return $this->filename_original;
    }

    public function setFilenameOriginal(string $filename_original): self
    {
        $this->filename_original = $filename_original;

        return $this;
    }

    public function getFilenameHash(): ?string
    {
        return $this->filename_hash;
    }

    public function setFilenameHash(string $filename_hash): self
    {
        $this->filename_hash = $filename_hash;

        return $this;
    }

    public function getPageCnt(): ?int
    {
        return $this->page_cnt;
    }

    public function setPageCnt(int $page_cnt): self
    {
        $this->page_cnt = $page_cnt;

        return $this;
    }

    public function getSizeInBytes(): ?int
    {
        return $this->size_in_bytes;
    }

    public function setSizeInBytes(int $size_in_bytes): self
    {
        $this->size_in_bytes = $size_in_bytes;

        return $this;
    }

    public function getUploadedAt(): ?DateTimeInterface
    {
        return $this->uploaded_at;
    }

    public function setUploadedAt(DateTimeInterface $uploaded_at): self
    {
        $this->uploaded_at = $uploaded_at;

        return $this;
    }

    public function getPreviewImageFilename(): ?string
    {
        return $this->preview_image_filename;
    }

    public function setPreviewImageFilename(string $preview_image_filename): self
    {
        $this->preview_image_filename = $preview_image_filename;

        return $this;
    }

    public function getAttachmentId(): ?int
    {
        return $this->attachment_id;
    }

    public function setAttachmentId(?int $attachment_id): self
    {
        $this->attachment_id = $attachment_id;

        return $this;
    }
}
